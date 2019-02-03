<?php 

namespace Severin\LaravelGoogleStorage;

class GoogleStorageAdapter extends \Superbalist\Flysystem\GoogleStorage\GoogleStorageAdapter
{
	/**
     * Get a temporary URL for the file at the given path.
     *
     * @param  \League\Flysystem\AwsS3v3\AwsS3Adapter  $adapter
     * @param  string $path
     * @param  \DateTimeInterface $expiration
     * @param  array $options
     * @return string
     */
    public function getAwsTemporaryUrl($path, $expiration, $options)
    {
        $client = $this->getObject($path);

        return $client->signedUrl($expiration);
    }
}