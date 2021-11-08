#!/bin/bash

curl https://www.meteocity.com/france/lille-v2998324 | grep '<meta property="og:title"' | cut -d '"' -f 4 > result.txt


