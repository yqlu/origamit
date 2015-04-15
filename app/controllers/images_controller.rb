class ImagesController < ApplicationController

	def index
		@year = params[:year].nil? ? 0 : params[:year].to_i
		@month = params[:month].nil? ? 0 : params[:month].to_i
		@day = params[:day].nil? ? 0 : params[:day].to_i

	end

	def calendar
		if request.xhr?
        	render :json => {
        		:dirs => directory_hash('public/gallery/year')
            }
    		end
	end

	def file
		@year = params[:year]
		@month = params[:month]
		@day = params[:day]
		@dir = "public/gallery/year/"+@year+"/"+@month+"/"+@year+"_"+@month+"_"+@day
		File.open(@dir+".html", "r") {|file| @file = file.read }
		if !File.directory?(@dir + "/thumbs")
			generate_thumbs(@dir)
		end
 		@images = get_images(@dir).map {|entry| @dir+'/'+entry}
 		if request.xhr?
        	render :json => {
        		:file => @file,
        		:images => @images
            }
    	end
    end


	private

	def generate_thumbs(dir)
		# include Magick
		Dir.mkdir(dir+"/thumbs")
		@images = get_images(dir)
		@images.each do |image|
			img = Magick::Image::read(dir+"/"+image).first
			thumb = img.resize_to_fill(120, 120)
			thumb.write dir+"/thumbs/"+image
		end

	end

	def get_images(dir)
		Dir.entries(@dir).select {|entry| /\.(gif|png|jpe?g|pdf)$/.match(entry) }
	end


	def directory_hash(path, name=nil)
	  data = {:data => (name || path)}
	  data[:children] = children = []
	  Dir.foreach(path) do |entry|
	    next if (entry == '..' || entry == '.' || entry =='thumbs')
	    full_path = File.join(path, entry)
	    if File.directory?(full_path)
	      children << directory_hash(full_path, entry)
	    end
	  end
	  return data
	end
end
