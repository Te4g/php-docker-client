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
    class ContainerSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerSummary::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerSummary::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ContainerSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Names', $data)) {
                $values = [];
                foreach ($data['Names'] as $value) {
                    $values[] = $value;
                }
                $object->setNames($values);
            }
            if (\array_key_exists('Image', $data)) {
                $object->setImage($data['Image']);
            }
            if (\array_key_exists('ImageID', $data)) {
                $object->setImageID($data['ImageID']);
            }
            if (\array_key_exists('ImageManifestDescriptor', $data)) {
                $object->setImageManifestDescriptor($this->denormalizer->denormalize($data['ImageManifestDescriptor'], \Vendor\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            if (\array_key_exists('Command', $data)) {
                $object->setCommand($data['Command']);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Ports', $data)) {
                $values_1 = [];
                foreach ($data['Ports'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\Port::class, 'json', $context);
                }
                $object->setPorts($values_1);
            }
            if (\array_key_exists('SizeRw', $data) && $data['SizeRw'] !== null) {
                $object->setSizeRw($data['SizeRw']);
            }
            elseif (\array_key_exists('SizeRw', $data) && $data['SizeRw'] === null) {
                $object->setSizeRw(null);
            }
            if (\array_key_exists('SizeRootFs', $data) && $data['SizeRootFs'] !== null) {
                $object->setSizeRootFs($data['SizeRootFs']);
            }
            elseif (\array_key_exists('SizeRootFs', $data) && $data['SizeRootFs'] === null) {
                $object->setSizeRootFs(null);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
            }
            if (\array_key_exists('State', $data)) {
                $object->setState($data['State']);
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
            }
            if (\array_key_exists('HostConfig', $data)) {
                $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \Vendor\Library\Generated\Model\ContainerSummaryHostConfig::class, 'json', $context));
            }
            if (\array_key_exists('NetworkSettings', $data)) {
                $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \Vendor\Library\Generated\Model\ContainerSummaryNetworkSettings::class, 'json', $context));
            }
            if (\array_key_exists('Mounts', $data)) {
                $values_3 = [];
                foreach ($data['Mounts'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\MountPoint::class, 'json', $context);
                }
                $object->setMounts($values_3);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $values = [];
                foreach ($object->getNames() as $value) {
                    $values[] = $value;
                }
                $data['Names'] = $values;
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('imageID') && null !== $object->getImageID()) {
                $data['ImageID'] = $object->getImageID();
            }
            if ($object->isInitialized('imageManifestDescriptor') && null !== $object->getImageManifestDescriptor()) {
                $data['ImageManifestDescriptor'] = $this->normalizer->normalize($object->getImageManifestDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $data['Command'] = $object->getCommand();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values_1 = [];
                foreach ($object->getPorts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Ports'] = $values_1;
            }
            if ($object->isInitialized('sizeRw') && null !== $object->getSizeRw()) {
                $data['SizeRw'] = $object->getSizeRw();
            }
            if ($object->isInitialized('sizeRootFs') && null !== $object->getSizeRootFs()) {
                $data['SizeRootFs'] = $object->getSizeRootFs();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_2 = [];
                foreach ($object->getLabels() as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $data['Labels'] = $values_2;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
                $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkSettings') && null !== $object->getNetworkSettings()) {
                $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_3 = [];
                foreach ($object->getMounts() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Mounts'] = $values_3;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerSummary::class => false];
        }
    }
} else {
    class ContainerSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ContainerSummary::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ContainerSummary::class;
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
            $object = new \Vendor\Library\Generated\Model\ContainerSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Names', $data)) {
                $values = [];
                foreach ($data['Names'] as $value) {
                    $values[] = $value;
                }
                $object->setNames($values);
            }
            if (\array_key_exists('Image', $data)) {
                $object->setImage($data['Image']);
            }
            if (\array_key_exists('ImageID', $data)) {
                $object->setImageID($data['ImageID']);
            }
            if (\array_key_exists('ImageManifestDescriptor', $data)) {
                $object->setImageManifestDescriptor($this->denormalizer->denormalize($data['ImageManifestDescriptor'], \Vendor\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            if (\array_key_exists('Command', $data)) {
                $object->setCommand($data['Command']);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Ports', $data)) {
                $values_1 = [];
                foreach ($data['Ports'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\Port::class, 'json', $context);
                }
                $object->setPorts($values_1);
            }
            if (\array_key_exists('SizeRw', $data) && $data['SizeRw'] !== null) {
                $object->setSizeRw($data['SizeRw']);
            }
            elseif (\array_key_exists('SizeRw', $data) && $data['SizeRw'] === null) {
                $object->setSizeRw(null);
            }
            if (\array_key_exists('SizeRootFs', $data) && $data['SizeRootFs'] !== null) {
                $object->setSizeRootFs($data['SizeRootFs']);
            }
            elseif (\array_key_exists('SizeRootFs', $data) && $data['SizeRootFs'] === null) {
                $object->setSizeRootFs(null);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
            }
            if (\array_key_exists('State', $data)) {
                $object->setState($data['State']);
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($data['Status']);
            }
            if (\array_key_exists('HostConfig', $data)) {
                $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \Vendor\Library\Generated\Model\ContainerSummaryHostConfig::class, 'json', $context));
            }
            if (\array_key_exists('NetworkSettings', $data)) {
                $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \Vendor\Library\Generated\Model\ContainerSummaryNetworkSettings::class, 'json', $context));
            }
            if (\array_key_exists('Mounts', $data)) {
                $values_3 = [];
                foreach ($data['Mounts'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\MountPoint::class, 'json', $context);
                }
                $object->setMounts($values_3);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('names') && null !== $object->getNames()) {
                $values = [];
                foreach ($object->getNames() as $value) {
                    $values[] = $value;
                }
                $data['Names'] = $values;
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('imageID') && null !== $object->getImageID()) {
                $data['ImageID'] = $object->getImageID();
            }
            if ($object->isInitialized('imageManifestDescriptor') && null !== $object->getImageManifestDescriptor()) {
                $data['ImageManifestDescriptor'] = $this->normalizer->normalize($object->getImageManifestDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $data['Command'] = $object->getCommand();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values_1 = [];
                foreach ($object->getPorts() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Ports'] = $values_1;
            }
            if ($object->isInitialized('sizeRw') && null !== $object->getSizeRw()) {
                $data['SizeRw'] = $object->getSizeRw();
            }
            if ($object->isInitialized('sizeRootFs') && null !== $object->getSizeRootFs()) {
                $data['SizeRootFs'] = $object->getSizeRootFs();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_2 = [];
                foreach ($object->getLabels() as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $data['Labels'] = $values_2;
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $object->getStatus();
            }
            if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
                $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkSettings') && null !== $object->getNetworkSettings()) {
                $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_3 = [];
                foreach ($object->getMounts() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Mounts'] = $values_3;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ContainerSummary::class => false];
        }
    }
}