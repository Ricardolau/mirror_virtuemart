/**
 * 
 */
package org.virtuemart.ant.patch;

import java.io.File;
import java.util.Set;

import org.apache.tools.ant.BuildException;
import org.apache.tools.ant.types.selectors.FileSelector;

/**
 * @author Greg Perkins
 *
 */
public class PatchSelector implements FileSelector
{

	private String svnRepositoryUrl = null;
	private String svnRepositoryPath = null;
    private long startRevision = 0;
    private long endRevision = -1;
    private PatchFileManifest manifest = null;
    /** test **/
//    private long done = 0;
    
    /**
     * Set the subversion repository url
     *
     * @param url the subversion repository url
     */
    public void setSvnRepositoryUrl(String url)
    {
        this.svnRepositoryUrl = url;
    }

    /**
     * Returns the subversion repository path
     * @return the path.
     */
    public String getSvnRepositoryUrl()
    {
        return this.svnRepositoryUrl;
    }
	
    /**
     * Set the subversion repository path
     *
     * @param url the subversion repository path
     */
    public void setSvnRepositoryPath(String path)
    {
        this.svnRepositoryPath = path;
    }

    /**
     * Returns the subversion repository path
     * @return the path.
     */
    public String getSvnRepositoryPath()
    {
        return this.svnRepositoryPath;
    }
	
    /**
     * Set the start revision
     *
     * @param startRevision the starting SVN revision
     */
    public void setStartRevision(long startRevision)
    {
        this.startRevision = startRevision;
    }

    /**
     * Returns the start revision
     * @return the start revision.
     */
    public long getStartRevision()
    {
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
	
	/* (non-Javadoc)
	 * @see org.apache.tools.ant.types.selectors.FileSelector#isSelected(java.io.File, java.lang.String, java.io.File)
	 */
	@Override
	public boolean isSelected(File basedir, String filename, File file) throws BuildException
	{
		filename = filename.replace('\\', '/');
		
		if( this.manifest == null )
		{
			this.manifest = new PatchFileManifest( svnRepositoryUrl, svnRepositoryPath, startRevision, endRevision, basedir.toString() );
		}
		
//		System.out.println( manifest.toString() );
		Set<String> paths = manifest.toSet();
		
		if( basedir.toString().indexOf("modules")>=0)
		{
			filename = "modules/" + filename;
		}
		
		if( basedir.toString().indexOf("mambots")>=0)
		{
			filename = "mambots/" + filename;
//			System.out.println("selector mambots: " + filename);
		}
		
		if( paths.contains( filename ) )
		{
//			System.out.println("include: " + basedir.toString() + " - " + filename);
			return true;
		}
		else
		{
//			System.out.println("exclude: " + basedir.toString() + " - " + filename);
			return false;
		}
		
	}

}
