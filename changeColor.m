clear; close all; clc;
img = double(imread('frog_contour'));
imgNew = zeros(size(img,1),size(img,2));

redIdx = var(img,0,3) > 200;
nonRedIdx = ones(size(img,1), size(img,2)) - redIdx;


maxValSet = 200;
maxValOutside = max(max(img(:,:,1).*nonRedIdx));

imgNew = round((img(:,:,1).*nonRedIdx)*maxValSet/maxValOutside);
imgNew = imgNew + 255*redIdx;

imshow(uint8(imgNew));