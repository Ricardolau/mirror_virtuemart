Instructions for building VirtueMart Patch files (for VM 1.1).

*********************************************************************
Patches from 1.1.1 to 1.1.y (where 1.1.y is the new release number).
*********************************************************************
Patches from 1.1.1 must be built manually, unfortunately, because we branched between 1.1.1 and 1.1.2.
Annoying and tedious.

1. Create a 1.1.1 manual install package by applying the 1.1.0->1.1.1 patch to the 1.1.0 manual install package.
2. Unzip the manual install package for 1.1.1.
3. Unzip the manual install package for the new release, 1.1.y.
4. Do a comparison on those directories to identify the changed and new files. (I recommend BeyondCompare.)
5. Place the changed and new files in their own directory.
6. In the Python script, vmpatch1.1.1xml.py, change the release information and the directories appropriately.
7. Run vmpatch1.1.1xml.py. This creates an update.xml file for the 1.1.1->1.1.y patch files you saved in #4.
8. Place the update.xml file in the directory in #4.
9. Zip the directory in #4. Be sure to zip up the directory's contents, not the directory itself.

Do steps 1-9 for a Joomla 1.0 manual install and for a Joomla 1.5 manual install. 

*********************************************************************
Patches from 1.1.x to 1.1.y (where 1.1.x is the original version to upgrade from, and 1.1.y is the new release number).
*********************************************************************
1. Determine your revision numbers.
 a. For the current release, choose the current revision number from SVN.
 b. For the original release, choose 1 revision *after* it was released.
2. Copy build.patch114-112.properties. Rename it to build.patch11y-11x.properties (use your x & y).
3. Copy build.patch114-112.xml. Rename it to build.patch11y-11x.xml.
4. Inside build.patch11y-11x.properties, change the release numbers, release date, etc to fit 1.1.x and 1.1.y.
 (You do not need to change the repository paths.)
5. Inside build.patch11y-11x.xml, change the line below to match your properties file name (from step 4):
 <property file="build.patch114-113.properties" />
6. Run the "patch" target in build.patch11y-11x.xml. It is the default target. E.g.

	ant -f build.patch115-112.xml patch

NOTE: In the output from running the ant build script, you can safely ignore any paths the are from 
another branch; they are removed automatically from the build.
