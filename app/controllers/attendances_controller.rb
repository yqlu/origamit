class AttendancesController < ApplicationController

	require 'csv'

	def output
		@attendances = Attendance.joins(:meeting).joins(:member).all
		respond_to do |format|
			format.html
			format.csv do
				headers['Content-Disposition'] = "attachment; filename=\"user-list\""
				headers['Content-Type'] ||= 'text/csv'
			end
		end
    end


	def show
		@attendances = Member.joins(:attendances).where("meeting_id = ?", params[:id])
		if request.xhr?
        	render :json => {
        		:attendances => @attendances
            }
    	end
    end

    def members
    	@members = Member.all
		if request.xhr?
        	render :json => {
        		:members => @members
            }
    	end
    end

	def create
		@member = Member.where("name = ?", attendance_params[:name]).first_or_initialize
		@member.name = attendance_params[:name]
		@member.affiliation = attendance_params[:affiliation]
		if attendance_params[:email].length > 0 and attendance_params[:email] != @member.email
			@member.email = attendance_params[:email]
			# save email into cron job to update webmaster
			@email = Email.new
			@email.address = attendance_params[:email]
			@email.save
		end
		@member.save
		@attendance = Attendance.new
		@attendance.member = @member
		@attendance.meeting = Meeting.find(attendance_params[:meeting])
		@attendance.save
		render nothing: true
	end

	def destroy
		Attendance.where("member_id = ?", params[:id]).destroy_all
		Member.includes(:attendances).where( :attendances => {:member_id=>nil} ).destroy_all
		render nothing: true
	end

	private

	def attendance_params
		params.require(:attendance).permit(:name, :affiliation, :email, :meeting)
	end

end
