<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDEC7vqC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDEC7vqC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDEC7vqC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDEC7vqC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDEC7vqC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DEC7vqC',
    'container.build_id' => '3b782270',
    'container.build_time' => 1557742084,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDEC7vqC');
