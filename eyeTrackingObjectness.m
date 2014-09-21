% Overlay the eye tracking data on the videos and visualize the top
% objectness frames using weighted eye tracking data.
% Read the eye tracking data videos and normalize it according to the video size
clear; close all; clc;

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%Parameters and Folder locations%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
vidNum = 7;
%vidFolder = '/Users/karthik87s/Research/eyeTrackingVideos/eyeTrackingInputVideos/';
% Expt 2 folder

vidFolder = '/Users/karthik87s/Research/eyeTrackingVideos/eyeTrackingInputVideos2/';

%vidNames = {'container_out', 'diving5_out', 'earth_4_out', 'garden_out', 'hd_slomo_surfer_out',...
%    'monkeydog_out','nocountryforoldmen_out','parachute_out','paris_out','slumdog_1_out',...
%    'soccer_out','stefan_out','waterski_out','yunakim_long2_out'};


%% Expt 2 VidNames
vidNames = {'boatSlow_out', 'coastguard_out', 'hall_monitor_out', 'mother_daughter_out',...
    'students_out','surveillence_out','walking_out'};


vidWriteFolder = ['/Users/karthik87s/Research/eyeTrackingVideos/eyeOverlayVideos/']
vidRead = VideoReader([vidFolder vidNames{vidNum} '.avi']);
saveVideo = 1;

%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%% Resize the video frames %%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

for jj=1:vidRead.NumberOfFrames
    jj
    vidFrames(:,:,:,jj) = read(vidRead,jj);
end

% Determine the actual video dimensions from imagesFolder

fileName = vidNames{vidNum}(1:end-4);
imagesFolder = ['imagesFolder/' fileName '/'];

a = dir(imagesFolder);
img = imread([imagesFolder '/' a(4).name]);

[imgRows imgCols dims] = size(img);

if(imgRows/imgCols > 1024/768)
    for jj=1:vidRead.NumberOfFrames
        vidType = 1;
        vidFramesTemp = imresize(vidFrames(:,:,:,jj),[imgRows NaN]);
        vidFramesResize(:,:,:,jj) = vidFramesTemp(:,round((size(vidFramesTemp,2) - imgCols)/2)+1 : round((size(vidFramesTemp,2) - imgCols)/2)+imgCols,:  );
    end
else
    for jj=1:vidRead.NumberOfFrames
        vidType = 2;
        vidFramesTemp = imresize(vidFrames(:,:,:,jj),[NaN imgCols]);
        vidFramesResize(:,:,:,jj) = vidFramesTemp(round((size(vidFramesTemp,1) - imgRows)/2)+1 : round((size(vidFramesTemp,1) - imgRows)/2)+imgRows,:,:  );
    end
end

imshow(vidFramesResize(:,:,:,10));


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Load eye tracking cluster data and resize the cluster data %%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

%frameTrackFiles = dir('/Users/karthik87s/Research/eyeTrackingVideos/frameTracks/*.mat');
% Expt 2 frame tracks folder
frameTrackFiles = dir('/Users/karthik87s/Research/eyeTrackingVideos/frameTracks1/*.mat');
%load(['/Users/karthik87s/Research/eyeTrackingVideos/frameTracks/' frameTrackFiles(vidNum).name]);
% Expt 2 frame tracks folder
load(['/Users/karthik87s/Research/eyeTrackingVideos/frameTracks1/' frameTrackFiles(vidNum).name]);

numTracks = length(frameTracks);

for trackNum=1:length(frameTracks)
    if( vidType == 1 )
        resizeFrameTracks{trackNum} = [frameTracks{trackNum}(:,1) frameTracks{trackNum}(:,2)]*imgRows/768 ;
    else
        resizeFrameTracks{trackNum} = [frameTracks{trackNum}(:,1) frameTracks{trackNum}(:,2)]*imgCols/1024 ;
    end
end

for trackNum = 1:length(frameTracks)
    
    if(vidType == 1)
        for frameNum = 1:length(fix3DTracksFrames{trackNum})
            if(isempty(fix3DTracksFrames{trackNum}{frameNum}))
                resizeFix3DTracksFrames{trackNum}{frameNum} = [];
            else
                resizeFix3DTracksFrames{trackNum}{frameNum} = [fix3DTracksFrames{trackNum}{frameNum}(:,1) fix3DTracksFrames{trackNum}{frameNum}(:,2)]*imgRows/768;
            end
        end
    else
        for frameNum = 1:length(fix3DTracksFrames{trackNum})
            if(isempty(fix3DTracksFrames{trackNum}{frameNum}))
                resizeFix3DTracksFrames{trackNum}{frameNum} = [];
            else
                resizeFix3DTracksFrames{trackNum}{frameNum} = [fix3DTracksFrames{trackNum}{frameNum}(:,1) fix3DTracksFrames{trackNum}{frameNum}(:,2)]*imgCols/1024;
            end
        end
    end
end

save(['/Users/karthik87s/Research/eyeTrackingVideos/origFrameTracks/' vidNames{vidNum}],'resizeFrameTracks','resizeFix3DTracksFrames');



% %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% %%%%%%%%%%%%%%%%%%%%% Visualize the resized frames %%%%%%%%%%%%%%%%%%%%%%%%
% %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% 
% 
% 
% %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% %% Visualize the Median Centroid point %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
if(saveVideo)
    writerObj =  VideoWriter([vidWriteFolder vidNames{vidNum} '.avi']);
    writeObj.FrameRate = 10;
    open(writerObj);
end


for trackNum = 1:numTracks
    lengthTracks(trackNum) = size(frameTracks{trackNum}, 1);
end

randColor = rand(1,3,numTracks);
figure;
for frameNum=1:vidRead.NumberOfFrames
    imshow(vidFramesResize(:,:,:,frameNum));
    hold on;
    for trackNum = 1:numTracks
        if( lengthTracks(trackNum) >= frameNum )
            if(resizeFrameTracks{trackNum}(frameNum,1) > 0 )
                plot(resizeFrameTracks{trackNum}(frameNum,1), resizeFrameTracks{trackNum}(frameNum,2),'Marker','o',...
                    'MarkerSize',3,'LineWidth',10,'Color',randColor(:,:,trackNum) );
            end
        end
    end
    pause(0.01);
    if(saveVideo)
        if(frameNum == 1)
            writeVideo(writerObj,getframe(gca));
        else
            pp = getframe(gca);
            pp.cdata = imresize(pp.cdata,[writerObj.Height writerObj.Width]);
            writeVideo(writerObj,pp);
        end
    end
    hold off;
end

if(saveVideo)
    close(writerObj);
end
% 
% 
% 
% %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% %% Visualize all the data points on a frame %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% 
% randColor = rand(1,3,numTracks);
% figure;
% for frameNum=1:vidRead.NumberOfFrames
%     imshow(vidFramesResize(:,:,:,frameNum));
%     hold on;
%     for trackNum = 1:numTracks
%         if( lengthTracks(trackNum) >= frameNum )
%             if(~isempty(resizeFix3DTracksFrames{trackNum}{frameNum}))
%                 for pointNum = 1:size(resizeFix3DTracksFrames{trackNum}{frameNum},1)
%                     if(resizeFix3DTracksFrames{trackNum}{frameNum}(pointNum,1) > 0)
%                         plot(resizeFix3DTracksFrames{trackNum}{frameNum}(pointNum,1), resizeFix3DTracksFrames{trackNum}{frameNum}(pointNum,2),'Marker','o',...
%                             'MarkerSize',3,'LineWidth',10, 'Color',randColor(:,:,trackNum) );
%                     end
%                 end
%             end
%         end
%     end
%     pause(0.01);
%     hold off;
% end
% 














