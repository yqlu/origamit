# Load the Rails application.
require File.expand_path('../application', __FILE__)

ActionMailer::Base.delivery_method = :smtp

ActionMailer::Base.smtp_settings = {
  :address              => "smtp.gmail.com",
  :port                 => "587",
  :domain               => "gmail.com",
  :user_name            => "origamit-calendar@mit.edu",
  :password             => "origamit",
  :authentication       => "plain",
  :enable_starttls_auto => true
}

# Initialize the Rails application.
Rails.application.initialize!

