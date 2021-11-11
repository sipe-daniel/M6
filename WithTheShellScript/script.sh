#!/bin/bash

curl https://www.meteocity.com/france/lille-v2998324 | grep 'property="og:title"' | sed "s/.* content=\"\(.*\)\".*/\1/" > result.txt



