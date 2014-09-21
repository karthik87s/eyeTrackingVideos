ColorRand = [1 0 0; 0 1 0];
figure;
%Adding the comment to this file
%ColorRand = rand(numTracks,3);
%vidObj = VideoWriter('test.avi');
%vidObj.FrameRate = 15;
% One more comment added
for frameIte = 1:vidRead.NumberOfFrames
    imshow(uint8(vidFrames(:,:,:,frameIte)));
    hold on;
    for jj=1:length(frameTracks)
        if(frameIte <= size(frameTracks{jj},1))
            if(~(frameTracks{jj}(frameIte,1) == -1))
                plot(frameTracks{jj}(frameIte,1),frameTracks{jj}(frameIte,2) ,'Color',ColorRand(jj,:),'Marker', '.', 'MarkerSize', 100 , 'LineStyle' , 'none');
                
            end
        end
    end
    pause(0.1);
    hold off;
    pp = getframe(gca);
    qq = pp.cdata;
    imwrite(qq,['frameTest1/' num2str(frameIte) '.png']);
end
