#!/bin/bash

echo Legofy >> .gitignore
git clone https://github.com/JuanPotato/Legofy.git
cd Legofy
python setup.py install
pip install legofy
cd..
mkdir i
echo Installed!
