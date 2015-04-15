class AlterAssociation < ActiveRecord::Migration
  def change
		add_reference :attendances, :meeting
		remove_reference :attendances, :meetings
  end
end
