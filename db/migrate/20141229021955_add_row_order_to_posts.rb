class AddRowOrderToPosts < ActiveRecord::Migration
  def change
    add_column :posts, :row_order, :integer
  end
end
