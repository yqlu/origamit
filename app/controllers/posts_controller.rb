class PostsController < ApplicationController

  http_basic_authenticate_with name: "origamit", password: "officer", except: [:index]

	def index
		@posts = Post.rank(:row_order)
	end

	def dashboard
		@posts = Post.rank(:row_order).all
	end

	def new
		@post = Post.new
	end

	def update_row_order
		@post = Post.find(params[:post][:post_id])
		@post.row_order_position = params[:post][:row_order_position]
		@post.save

		render nothing: true
	end

	def display
		@post = Post.find(params[:id])
		@post.display = !@post.display
		@post.save
		render nothing: true
	end

	def edit
		@post = Post.find(params[:id])
	end

	def update
		@post = Post.find(params[:id])

		if @post.update(post_params)
			redirect_to '/posts/dashboard'
		else
			render 'edit'
		end
	end

	def create
		@post = Post.new(post_params)
		@post.row_order_position = 0
		if @post.save
			redirect_to '/posts/dashboard'
		else
			render 'new'
		end
	end

	def destroy
		@post = Post.find(params[:id])
		@post.destroy
		redirect_to '/posts/dashboard'
	end

	private

	def post_params
		params.require(:post).permit(:title, :text, :row_order_position)
	end
end
