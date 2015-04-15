class CreateAttendance < ActiveRecord::Migration
	def change
		create_table :attendances do |t|
			t.belongs_to :member, index: true
			t.datetime :meeting_date
		    t.timestamps null: false
		end

		create_table :members do |t|
			t.string :name
			t.string :affiliation
			t.string :email
		end
	end
end
