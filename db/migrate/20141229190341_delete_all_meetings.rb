class DeleteAllMeetings < ActiveRecord::Migration
  def change
  	Meeting.delete_all
  end
end
