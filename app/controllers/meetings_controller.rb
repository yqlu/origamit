class MeetingsController < ApplicationController
	http_basic_authenticate_with name: "origamit", password: "officer"

	def index
		@meeting = Meeting.new
	end

	def getAll
		if request.xhr?
        	render :json => {
                :meetings => Meeting.all
            }
    	end
	end

	def emails
		@emails = Email.all
	end

	def emails_delete
		Email.destroy_all
		render nothing: true

	end

	def show
		@meeting = Meeting.find(params[:id])
	end

	def create
		@meeting = Meeting.new(meeting_params)
		@meeting.save
		render nothing: true
	end

	def destroy
		@meeting = Meeting.find(params[:id])
		@meeting.destroy	 
		render nothing: true
	end

	private

	def meeting_params
		if params[:meeting][:meeting_date].is_a?(String)
			params[:meeting][:meeting_date] = DateTime.strptime(params[:meeting][:meeting_date], "%m/%d/%Y").change(:hour => 15)
		end
		params.require(:meeting).permit(:meeting_date)
	end

end
