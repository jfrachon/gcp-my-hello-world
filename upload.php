<?php

    // Upload file to default app engine storage bucket
    use google\appengine\api\cloud_storage\CloudStorageTools;
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    echo $target_file;
    $default_bucket = CloudStorageTools::getDefaultGoogleStorageBucketName();
    file_put_contents("gs://${default_bucket}/" . $target_file, $newFileContent);
    echo $default_bucket;

?>