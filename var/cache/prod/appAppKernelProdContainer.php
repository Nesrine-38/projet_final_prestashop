<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3nBuLQj\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3nBuLQj/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container3nBuLQj.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container3nBuLQj\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container3nBuLQj\appAppKernelProdContainer([
    'container.build_hash' => '3nBuLQj',
    'container.build_id' => '87ee8c7f',
    'container.build_time' => 1697983368,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3nBuLQj');
