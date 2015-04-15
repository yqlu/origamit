class ChangeAssociation < ActiveRecord::Migration
	def change
		remove_reference :attendances, :meeting
		add_reference :attendances, :meetings
	end
end