<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDnmUmaC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDnmUmaC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDnmUmaC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDnmUmaC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDnmUmaC\App_KernelDevDebugContainer([
    'container.build_hash' => 'DnmUmaC',
    'container.build_id' => 'fb5f2bb2',
    'container.build_time' => 1699991958,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDnmUmaC');