docker build -t local/autorest .

docker run --rm --name autorest -v "%cd%"/../sdk:/out -v "%cd%":/input local/autorest  /input/readme.md --v3 --php --php-sdks-folder=/out  --add-credentials
