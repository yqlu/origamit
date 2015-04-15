class Post < ActiveRecord::Base
  include RankedModel
  ranks :row_order

  validates :title, presence: true,
                    length: { minimum: 5 }

end
