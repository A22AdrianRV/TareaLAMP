<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW1NxIQT\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW1NxIQT/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerW1NxIQT.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerW1NxIQT\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerW1NxIQT\appAppKernelProdContainer([
    'container.build_hash' => 'W1NxIQT',
    'container.build_id' => 'e1e37489',
    'container.build_time' => 1710879893,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW1NxIQT');
