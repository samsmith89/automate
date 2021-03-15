#!/bin/bash
# Deploy the build from Github

wp maintenance-mode activate

git pull

wp maintenance-mode deactivate