ALTER TABLE artist_v2_apps 
ADD app_link VARCHAR(255) DEFAULT NULL AFTER form_url, 
ADD tutorial_video VARCHAR(255) DEFAULT NULL AFTER app_link; 