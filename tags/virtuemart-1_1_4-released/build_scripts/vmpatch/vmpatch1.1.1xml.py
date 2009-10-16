import fnmatch
import fileinput
import string
import codecs

import os
import re

def createXML(path):
    fileList = []
    rootdir = path
    for root, subFolders, files in os.walk(rootdir):
        for file in files:
            fileName = os.path.join(root,file).replace(rootdir, "")
            fileName = fileName.replace("\\", "/")
            fileName = fileName.lstrip("/")
            fileList.append(fileName)
    
    forversion = "1.1.1"
    toversion = "1.1.4"
    releasedate = "September 18, 2009"
    description = "This is the patch file for updating VirtueMart from version 1.1.1 to version 1.1.4."
    writer = open(rootdir + '/update.xml', 'w')
    writer.write("<?xml version=\"1.0\" encoding=\"utf-8\"?>")
    writer.write("\n")
    writer.write("\t<vmupdate>")
    writer.write("\n")
    writer.write("\t\t<forversion>" + forversion + "</forversion>")
    writer.write("\n")
    writer.write("\t\t<toversion>" + toversion + "</toversion>")
    writer.write("\n")
    writer.write("\t\t<releasedate>" + releasedate + "</releasedate>")
    writer.write("\n")
    writer.write("\t\t<description>" + description + "</description>")
    writer.write("\n")
    writer.write( "\t\t<files>")
    
    for f in fileList:
        writer.write("\n")
        if f.startswith("modules"):
            writer.write( "\t\t\t<file copy=\"only_if_exists\">" + f + "</file>" )
        else:
            writer.write( "\t\t\t<file copy=\"overwrite_create\">" + f + "</file>" )
        print f    

    writer.write("\n")
    writer.write( "\t\t</files>")
    writer.write("\n")
    writer.write( "</vmupdate>")

    writer.close()

if __name__ == '__main__' :

    path = "C:/Projekte/VirtueMart/build/vm_1.1.1_j10changed"
    createXML(path)

#    path = "D:/m/build/vm-1.1/vm-1.1.3-090122/1.1.1-1.1.3/Patch-VirtueMart-1.1.1-1.1.3.j15"
#    createXML(path)

    print "Done"
