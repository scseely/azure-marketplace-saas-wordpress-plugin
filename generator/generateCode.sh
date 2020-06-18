docker build -t local/autorest .

if [ ! -d "../sdk" ]; then
    mkdir "../sdk"
fi

docker run --rm --name autorest -v `../sdk`:/out -v `pwd`:/input local/autorest  /input/readme.md --v3 --php --php-sdks-folder=/out  --add-credentials

#docker run --rm --name autorest -v ../sdk:/out -v "%cd%":/input local/autorest  /input/readme.md --v3 --php --php-sdks-folder=/out  --add-credentials
