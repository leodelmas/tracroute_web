<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container829yZ42\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container829yZ42/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container829yZ42.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container829yZ42\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container829yZ42\appAppKernelProdContainer([
    'container.build_hash' => '829yZ42',
    'container.build_id' => 'f8ab6db7',
    'container.build_time' => 1694008328,
], __DIR__.\DIRECTORY_SEPARATOR.'Container829yZ42');
