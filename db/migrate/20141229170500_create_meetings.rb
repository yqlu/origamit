class CreateMeetings < ActiveRecord::Migration
	def change
		create_table :meetings do |t|
			t.datetime :meeting_date
			t.timestamps null: false
		end

		remove_column :attendances, :meeting_date, :datetime
		add_reference :attendances, :meeting, index: true
	end
end
