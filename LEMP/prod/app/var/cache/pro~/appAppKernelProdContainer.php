<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWQnAEpk\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWQnAEpk/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerWQnAEpk.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerWQnAEpk\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerWQnAEpk\appAppKernelProdContainer([
    'container.build_hash' => 'WQnAEpk',
    'container.build_id' => '20a0d951',
    'container.build_time' => 1710885740,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWQnAEpk');