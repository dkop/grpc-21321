# gRPC PHP fork segmentation fault
To run, simply run (composer and docker must be installed)
```
./run
```

This will build three images based on php:7.4-cli image that includes grpc versions 1.19.0, 1.20.0, 1.26.0. Then it will start a containers, based on these images and executes simple scripts using gRPC. Image with grpc-1.19.0 works without crash, 1.20.0 and 1.26.0 with crash.

gRPC Issue
https://github.com/grpc/grpc/issues/21321
