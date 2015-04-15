class ShowPost < ActiveRecord::Migration
  def change
	add_column :posts, :display, :boolean, :default => true
  end
end
