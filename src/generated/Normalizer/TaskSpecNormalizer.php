<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\TaskSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PluginSpec', $data)) {
                $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class, 'json', $context));
            }
            if (\array_key_exists('ContainerSpec', $data)) {
                $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \Vendor\Library\Generated\Model\TaskSpecContainerSpec::class, 'json', $context));
            }
            if (\array_key_exists('NetworkAttachmentSpec', $data)) {
                $object->setNetworkAttachmentSpec($this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \Vendor\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context));
            }
            if (\array_key_exists('Resources', $data)) {
                $object->setResources($this->denormalizer->denormalize($data['Resources'], \Vendor\Library\Generated\Model\TaskSpecResources::class, 'json', $context));
            }
            if (\array_key_exists('RestartPolicy', $data)) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Vendor\Library\Generated\Model\TaskSpecRestartPolicy::class, 'json', $context));
            }
            if (\array_key_exists('Placement', $data)) {
                $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \Vendor\Library\Generated\Model\TaskSpecPlacement::class, 'json', $context));
            }
            if (\array_key_exists('ForceUpdate', $data)) {
                $object->setForceUpdate($data['ForceUpdate']);
            }
            if (\array_key_exists('Runtime', $data)) {
                $object->setRuntime($data['Runtime']);
            }
            if (\array_key_exists('Networks', $data)) {
                $values = [];
                foreach ($data['Networks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $object->setNetworks($values);
            }
            if (\array_key_exists('LogDriver', $data)) {
                $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \Vendor\Library\Generated\Model\TaskSpecLogDriver::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('pluginSpec') && null !== $object->getPluginSpec()) {
                $data['PluginSpec'] = $this->normalizer->normalize($object->getPluginSpec(), 'json', $context);
            }
            if ($object->isInitialized('containerSpec') && null !== $object->getContainerSpec()) {
                $data['ContainerSpec'] = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
            }
            if ($object->isInitialized('networkAttachmentSpec') && null !== $object->getNetworkAttachmentSpec()) {
                $data['NetworkAttachmentSpec'] = $this->normalizer->normalize($object->getNetworkAttachmentSpec(), 'json', $context);
            }
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('placement') && null !== $object->getPlacement()) {
                $data['Placement'] = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
            }
            if ($object->isInitialized('forceUpdate') && null !== $object->getForceUpdate()) {
                $data['ForceUpdate'] = $object->getForceUpdate();
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values = [];
                foreach ($object->getNetworks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Networks'] = $values;
            }
            if ($object->isInitialized('logDriver') && null !== $object->getLogDriver()) {
                $data['LogDriver'] = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskSpec::class => false];
        }
    }
} else {
    class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\TaskSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\TaskSpec::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\TaskSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('PluginSpec', $data)) {
                $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], \Vendor\Library\Generated\Model\TaskSpecPluginSpec::class, 'json', $context));
            }
            if (\array_key_exists('ContainerSpec', $data)) {
                $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \Vendor\Library\Generated\Model\TaskSpecContainerSpec::class, 'json', $context));
            }
            if (\array_key_exists('NetworkAttachmentSpec', $data)) {
                $object->setNetworkAttachmentSpec($this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \Vendor\Library\Generated\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context));
            }
            if (\array_key_exists('Resources', $data)) {
                $object->setResources($this->denormalizer->denormalize($data['Resources'], \Vendor\Library\Generated\Model\TaskSpecResources::class, 'json', $context));
            }
            if (\array_key_exists('RestartPolicy', $data)) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Vendor\Library\Generated\Model\TaskSpecRestartPolicy::class, 'json', $context));
            }
            if (\array_key_exists('Placement', $data)) {
                $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \Vendor\Library\Generated\Model\TaskSpecPlacement::class, 'json', $context));
            }
            if (\array_key_exists('ForceUpdate', $data)) {
                $object->setForceUpdate($data['ForceUpdate']);
            }
            if (\array_key_exists('Runtime', $data)) {
                $object->setRuntime($data['Runtime']);
            }
            if (\array_key_exists('Networks', $data)) {
                $values = [];
                foreach ($data['Networks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $object->setNetworks($values);
            }
            if (\array_key_exists('LogDriver', $data)) {
                $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \Vendor\Library\Generated\Model\TaskSpecLogDriver::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('pluginSpec') && null !== $object->getPluginSpec()) {
                $data['PluginSpec'] = $this->normalizer->normalize($object->getPluginSpec(), 'json', $context);
            }
            if ($object->isInitialized('containerSpec') && null !== $object->getContainerSpec()) {
                $data['ContainerSpec'] = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
            }
            if ($object->isInitialized('networkAttachmentSpec') && null !== $object->getNetworkAttachmentSpec()) {
                $data['NetworkAttachmentSpec'] = $this->normalizer->normalize($object->getNetworkAttachmentSpec(), 'json', $context);
            }
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('placement') && null !== $object->getPlacement()) {
                $data['Placement'] = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
            }
            if ($object->isInitialized('forceUpdate') && null !== $object->getForceUpdate()) {
                $data['ForceUpdate'] = $object->getForceUpdate();
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values = [];
                foreach ($object->getNetworks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Networks'] = $values;
            }
            if ($object->isInitialized('logDriver') && null !== $object->getLogDriver()) {
                $data['LogDriver'] = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\TaskSpec::class => false];
        }
    }
}