class UpdatePosts < ActiveRecord::Migration
  def change
    Post.find_each do |post|
      post.display = true
      post.save
    end
   end
end
