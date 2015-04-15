class Meeting < ActiveRecord::Base
	has_many :attendances
end
