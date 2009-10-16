package org.virtuemart.ant.patch;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStreamWriter;

import org.apache.tools.ant.BuildException;
import org.apache.tools.ant.Task;

import org.virtuemart.ant.patch.PatchFileManifest;

public class PatchFileManifestTask extends Task {

	private PatchFileManifest manifest = null;
    private File manifestFile = null;
    private String svnRepositoryUrl = null;
    private String svnRepositoryPath = null;
    private long startRevision = 0;
    private long endRevision = -1;
    private String forVersion = null;
    private String toVersion = null;
    private String releaseDate = null;
    private String description = null;

    /**
     * Set the subversion repository url
     *
     * @param url the subversion repository url
     */
    public void setSvnrepositoryurl(String url)
    {
        this.svnRepositoryUrl = url;
    }

    /**
     * Returns the subversion repository url
     * @return the url.
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
	
    /**
     * The name of the manifest file to create/update.
     * 
     * @param f the Manifest file to be written
     */
    public void setFile(File f) {
        manifestFile = f;
    }

    /**
     * Set the forVersion
     *
     * @param forVersion the forVersion
     */
    public void setForVersion(String forVersion)
    {
        this.forVersion = forVersion;
    }

    /**
     * Returns the forVersion
     * @return the forVersion.
     */
    public String getForVersion()
    {
        return this.forVersion;
    }

    /**
     * Set the toVersion
     *
     * @param toVersion the toVersion
     */
    public void setToVersion(String toVersion)
    {
        this.toVersion = toVersion;
    }

    /**
     * Returns the toVersion
     * @return the toVersion.
     */
    public String getToVersion()
    {
        return this.toVersion;
    }

    /**
     * Set the releaseDate
     *
     * @param releaseDate the releaseDate
     */
    public void setReleaseDate(String releaseDate)
    {
        this.releaseDate = releaseDate;
    }

    /**
     * Returns the releaseDate
     * @return the releaseDate.
     */
    public String getReleaseDate()
    {
        return this.releaseDate;
    }

    /**
     * Set the description
     *
     * @param description the description
     */
    public void setDescription(String description)
    {
        this.description = description;
    }

    /**
     * Returns the description
     * @return the description.
     */
    public String getDescription()
    {
        return this.description;
    }

	public PatchFileManifestTask()
	{
	}
	
    /**
     * Create or update the Manifest file
     *
     * @throws BuildException if the manifest cannot be written.
     */
    public void execute() throws BuildException {
		if( this.manifest == null )
		{
			this.manifest = new PatchFileManifest( svnRepositoryUrl, svnRepositoryPath, startRevision, endRevision, null );
		}

		if (manifestFile == null) {
            throw new BuildException("The file attribute is required");
        }

        BufferedWriter writer = null;
        try {
            FileOutputStream fos = new FileOutputStream(manifestFile);
            OutputStreamWriter osw = new OutputStreamWriter(fos, "UTF-8");
            writer = new BufferedWriter( osw );
            manifest.toXml( writer, forVersion, toVersion, releaseDate, description );
            writer.close();
        } catch (IOException e) {
            throw new BuildException("Failed to write " + manifestFile, e, getLocation());
        }
    }

}
