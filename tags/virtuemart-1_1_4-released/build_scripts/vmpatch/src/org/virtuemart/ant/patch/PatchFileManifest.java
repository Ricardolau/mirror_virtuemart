/**
 * 
 */
package org.virtuemart.ant.patch;

import java.util.Collection;
import java.util.TreeSet;
import java.util.HashSet;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Set;
import java.util.SortedSet;
import java.io.BufferedWriter;
import java.io.File;
import java.io.IOException;

import org.tmatesoft.svn.core.SVNException;
import org.tmatesoft.svn.core.SVNLogEntry;
import org.tmatesoft.svn.core.SVNLogEntryPath;
import org.tmatesoft.svn.core.SVNURL;
import org.tmatesoft.svn.core.internal.io.dav.DAVRepositoryFactory;
import org.tmatesoft.svn.core.internal.io.fs.FSRepositoryFactory;
import org.tmatesoft.svn.core.internal.io.svn.SVNRepositoryFactoryImpl;
import org.tmatesoft.svn.core.io.SVNRepository;
import org.tmatesoft.svn.core.io.SVNRepositoryFactory;

/**
 * @author admin
 *
 */
public class PatchFileManifest
{
	private String svnRepositoryUrl = null;
	private String svnRepositoryPath = null;
    private long startRevision = 0;
    private long endRevision = -1;
    private String forVersion = null;
    private String toVersion = null;
    private String releaseDate = null;
    private String description = null;
    private String file = null;
    private Set<String> paths = null;
    private Set<SVNLogEntryPath> entries = null;
//    private HashMap<File, SVNLogEntryPath[]> fileListMap = new HashMap<File, SVNLogEntryPath[]>();

    /**
     * Set the start revision
     *
     * @param startRevision the starting SVN revision
     */
    public void setStartRevision(long startRevision) {
        this.startRevision = startRevision;
    }
    /**
     * Returns the start revision
     * @return the start revision.
     */
    public long getStartRevision()  {
        return this.startRevision;
    }

    /**
     * Set the end revision
     *
     * @param endRevision the ending SVN revision
     */
    public void setEndRevision(long endRevision)
    {
        this.endRevision = endRevision;
    }

    /**
     * Returns the end revision
     * @return the end revision.
     */
    public long getEndRevision()
    {
        return this.endRevision;
    }
	public void setSvnRepositoryUrl(String repositoryUrl ){
		this.svnRepositoryUrl = repositoryUrl;
	}
	public void setSvnRepositoryPath(String repositoryPath ){
		this.svnRepositoryPath = repositoryPath;
	}
	public void setForVersion(String forVersion ){
		this.forVersion = forVersion;
	}
	public void setToVersion(String toVersion ){
		this.toVersion = toVersion;
	}
	public void setReleaseDate(String releaseDate ){
		this.releaseDate = releaseDate;
	}
	public void setDescription(String description ){
		this.description = description;
	}
	public void setFile(String file ){
		this.file = file;
	}
	public PatchFileManifest( String repositoryUrl, String repositoryPath, long startRevision, long endRevision, String basedir )
	{
		this.svnRepositoryUrl = repositoryUrl;
		this.svnRepositoryPath = repositoryPath;
		this.startRevision = startRevision;
		this.endRevision = endRevision;
		loadEntries(basedir);
	}
	
	public Set<SVNLogEntryPath> getEntries()
	{
		return entries;
	}
	
	public SVNLogEntryPath[] toArray()
	{
		return entries.toArray(new SVNLogEntryPath[0]);
	}
	
	public Set<String> toSet()
	{
		return paths;
	}
	
	public String toString()
	{
		String sManifest = "";
		for( SVNLogEntryPath entry : entries.toArray(new SVNLogEntryPath[0]) )
		{
			sManifest += entry.toString() + "\n";
		}
		
		return sManifest;
	}
	
	public void toXml( BufferedWriter writer, String forversion, String toversion, String releasedate, String description ) throws IOException
	{
		writer.write("<?xml version=\"1.0\" encoding=\"utf-8\"?>");
		writer.newLine();
		writer.write("\t<vmupdate>");
		writer.newLine();
		writer.write("\t\t<forversion>" + forversion + "</forversion>");
		writer.newLine();
		writer.write("\t\t<toversion>" + toversion + "</toversion>");
		writer.newLine();
		writer.write("\t\t<releasedate>" + releasedate + "</releasedate>");
		writer.newLine();
		writer.write("\t\t<description>" + description + "</description>");
		writer.newLine();
		writer.write( "\t\t<files>");
		
//		SortedSet<String> fullPaths = (SortedSet) fullPaths( paths );
		Set<String> fullPaths = fullPaths( paths ); 
		SortedSet<String> sortedPaths = new TreeSet<String>();
		sortedPaths.addAll( fullPaths );
		for( String path : sortedPaths )
		{
			writer.newLine();
			writer.write( "\t\t\t<file>" + path + "</file>" );			
		}
//		for( SVNLogEntryPath entry : entries )
//		{
//			writer.newLine();
//			writer.write( "\t\t\t<file>" + entry.getPath() + "</file>" );
//		}
		writer.newLine();
		writer.write( "\t\t</files>");
		writer.newLine();
		writer.write( "</vmupdate>");
	}
	
	/*
	 * Prepends full path to short paths
	 *  
	 */
	private Set<String> fullPaths( Set<String> paths )
	{
		Set<String> fullPaths = new HashSet<String>();
		
		HashMap<String, String> map = new HashMap<String, String>();
		
		// administrator/components
		map.put( "languages", "administrator/components/com_virtuemart/" );
		map.put( "classes", "administrator/components/com_virtuemart/" );
		map.put( "html", "administrator/components/com_virtuemart/" );
		map.put( "sql", "administrator/components/com_virtuemart/" );
		map.put( "admin**", "administrator/components/com_virtuemart/" );
		
		// components
		map.put( "js", "components/com_virtuemart/" );
		map.put( "shop_image", "components/com_virtuemart/" );
		map.put( "themes", "components/com_virtuemart/" );
		map.put( "fetchscript.php", "components/com_virtuemart/" );
		map.put( "show_image_in_imgtag.php", "components/com_virtuemart/" );
		map.put( "virtuemart_parser.php", "components/com_virtuemart/" );
		map.put( "virtuemart.php", "components/com_virtuemart/" );
		
		for( String path : paths )
		{
			int i = path.indexOf( File.separatorChar );
			
			// This is a directory
			if(  i > 0 )
			{
//				System.out.println("dir: " + path);
				String dir = path.substring( 0, i );
				String prepend = map.get( dir );
				if( prepend != null )
				{
					fullPaths.add( map.get( dir ) + path );
				}
				else
				{
					fullPaths.add( path );
				}
			}
			else
			{
//				System.out.println("not dir: " + path);
				if( map.containsKey( path ) )
				{
					fullPaths.add( map.get( path ) + path );
				}
				else
				{
					fullPaths.add( map.get( "admin**" ) + path );
				}
			}
			
		}
		
		return fullPaths;
	}
	
    private void loadEntries(String basedir) {
        String trunkPath = "/trunk/virtuemart/";
//        String remove = "/branches/virtuemart-1.1/virtuemart/";
        
    	setupLibrary();

        SVNRepository repository = null;
        
        try {
            repository = SVNRepositoryFactory.create(SVNURL.parseURIEncoded(svnRepositoryUrl + svnRepositoryPath));
        } catch (SVNException svne) {
        	throw new RuntimeException("Error while creating an SVNRepository for the location '"
                    + svnRepositoryUrl + svnRepositoryPath + "': " + svne.getMessage());
        }

        Collection logEntries = null;
        try {
            logEntries = repository.log(new String[] {""}, null, startRevision, endRevision, true, true);
        } catch (SVNException svne) {
        	throw new RuntimeException("Error while collecting log information for '"
                    + svnRepositoryUrl + svnRepositoryPath + "': " + svne.getMessage());
        }
        
        System.out.println( "logentries created: start=" + startRevision + ", end=" + endRevision + "\nurl=" + svnRepositoryUrl + svnRepositoryPath );
        
        Set<SVNLogEntryPath> allChangedPaths = new HashSet<SVNLogEntryPath>();
        Set<String> sPaths = new HashSet<String>();
        
        // Loop through the log entries and collect the changed paths
        for (Iterator entries = logEntries.iterator(); entries.hasNext();) {
            /*
             * gets a next SVNLogEntry
             */
            SVNLogEntry logEntry = (SVNLogEntry) entries.next();
            long revision = logEntry.getRevision();
//            System.out.println( revision );
            if (logEntry.getChangedPaths().size() > 0) {
                /*
                 * keys are changed paths
                 */
                Set changedPathsSet = logEntry.getChangedPaths().keySet();

                // Collect this entry's changed paths
                for (Iterator changedPaths = changedPathsSet.iterator(); changedPaths.hasNext();) {
                    /*
                     * obtains a next SVNLogEntryPath
                     */
                    SVNLogEntryPath entryPath = (SVNLogEntryPath) logEntry.getChangedPaths().get(changedPaths.next());
                    
//                    if( entryPath.getPath().indexOf(remove)>=0 ) {
//                        System.out.println( entryPath );
                    String shortPath = entryPath.getPath();
//                    System.out.println(shortPath);
                    if( entryPath.getPath().indexOf(this.svnRepositoryPath)>=0 ) {	
                    	shortPath = entryPath.getPath().substring( this.svnRepositoryPath.length(), entryPath.getPath().length() );
                    	entryPath.setPath( shortPath );
                    } else if( revision <= 1503 ) {
                    	shortPath = entryPath.getPath().substring( trunkPath.length(), entryPath.getPath().length() );
                    	entryPath.setPath( shortPath );
//                    	System.out.println( revision );
                    }
                    	
//                    	if( shortPath.indexOf( "languages/")>=0 ) {
//                    		if( shortPath.indexOf( "english.php")>=0 ) {
//		                    	allChangedPaths.add(entryPath);
////		                    	sPaths.add( entryPath.getPath() );
//		                    	sPaths.add( shortPath );
//                    		} 
//                    	}  else {
//	                    	allChangedPaths.add(entryPath);
////	                    	sPaths.add( entryPath.getPath() );
//                    		sPaths.add( shortPath );
//
//                    	}

                    	// Add everything
                    	allChangedPaths.add(entryPath);
//                    	System.out.println(entryPath);
//                    	sPaths.add( entryPath.getPath() );
                		sPaths.add( shortPath );
//                		System.out.println(shortPath);

                    	// Remove any files that were previously modified. but have since been deleted
                    	if( entryPath.getType() == SVNLogEntryPath.TYPE_DELETED ) {
                    		if( sPaths.contains( shortPath ) ) {
                    			sPaths.remove( shortPath );
//                    			System.out.println( "Removed: " + shortPath );
                    		}
//                    	}
                    }
                }
            }
        }

		// Cache our array of file-objects
//            fileListMap.put(file, files);
        
        // This is really annoying, but we need to add these two files that were changed just before branching,
        // but after version 1.2 was released.
        if( this.startRevision <= 1501 ) {
        	sPaths.add( "modules/vm_tigratree.php" );
        	sPaths.add( "modules/tigratree/tree.js" );
        }
        
        // Return the array of SVNLogEntryPath's
        this.entries = allChangedPaths;
        this.paths = sPaths;
        
//        // Debug
//        for (String p : sPaths) {
//        	System.out.println(p);
//        }

        //        System.out.println( this.paths.toString() );
   }

    /*
     * Initializes the library to work with a repository via 
     * different protocols.
     */
    private static void setupLibrary() {
        /*
         * For using over http:// and https://
         */
        DAVRepositoryFactory.setup();
        /*
         * For using over svn:// and svn+xxx://
         */
        SVNRepositoryFactoryImpl.setup();
        
        /*
         * For using over file:///
         */
        FSRepositoryFactory.setup();
    }

	
}
