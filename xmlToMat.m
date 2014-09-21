% Parse XML file to read the different objects and associated polygons

%xmlHandle = parseXML('annotations/squares.xml');
load xmlHandle;
xmlHandle = pp;

% Find the indices of objects in the list

objIdx = [];
for ii = 1:length(xmlHandle.Children)
    if(strcmp(xmlHandle.Children(ii).Name, 'object'))
        objIdx = [objIdx ii];
    elseif (strcmp(xmlHandle.Children(ii).Name, 'numFrames'))
        numFrames = str2num(xmlHandle.Children(ii).Children.Data);
    end
end

for ii = 1:length(objIdx)
    % Get the properties of the objects
    objects(ii).coords = [];
    for jj = 1:length(xmlHandle.Children(objIdx(ii)).Children)
        var = xmlHandle.Children(objIdx(ii)).Children(jj);
        switch var.Name
            case 'polygon'
                temp = [];
                for kk=1:length(var.Children) - 1
                    temp = [temp str2num(var.Children(1+kk).Children(1).Children.Data)  str2num(var.Children(1+kk).Children(2).Children.Data)   ];
                end
                objects(ii).coords = [objects(ii).coords ; temp];
                
            case 'name'
                objects(ii).name = var.Children.Data;
            
            case 'startFrame'
                objects(ii).startFrame = var.Children.Data;
                
            case 'endFrame'
                objects(ii).endFrame = var.Children.Data;
        end     
    end
end

vidObj = VideoReader('videos/squares.flv');

nFrames = vidObj.NumberOfFrames;
vidHeight = vidObj.Height;
vidWidth = vidObj.Width;

% Preallocate movie structure.
mov(1:nFrames) = struct('cdata', zeros(vidHeight, vidWidth, 3, 'uint8'),'colormap', []);

% Read one frame at a time.
shapeInserter = vision.ShapeInserter('CustomBorderColor',round(255*rand(length(objects),3)),'Shape','rectangles','BorderColor','Custom','FillColor','Custom','Fill',true,'CustomFillColor',round(255*rand(length(objects),3)),'Opacity',0.7);
for k = 1 : nFrames
    coordNum = k+1;
    vidFrame = read(vidObj, k);
    rectanglesList = [];
    for ii=1:length(objects)
        rectanglesList(ii,:) = [objects(ii).coords(coordNum,1) objects(ii).coords(coordNum,2) (objects(ii).coords(coordNum,5) - objects(ii).coords(coordNum,1)) (objects(ii).coords(coordNum,4) - objects(ii).coords(coordNum,2))  ];
    end
    vidFrameOut = step(shapeInserter, vidFrame, int32(rectanglesList));
    mov(k).cdata = vidFrameOut;
end

% Size a figure based on the video's width and height.
hf = figure;
set(hf, 'position', [150 150 vidWidth vidHeight])

% Play back the movie once at the video's frame rate.
movie(hf, mov, 1, vidObj.FrameRate);


















