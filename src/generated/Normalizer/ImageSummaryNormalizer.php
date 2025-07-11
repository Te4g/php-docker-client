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
    class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ImageSummary::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ImageSummary::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ImageSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('ParentId', $data)) {
                $object->setParentId($data['ParentId']);
            }
            if (\array_key_exists('RepoTags', $data)) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
            }
            if (\array_key_exists('RepoDigests', $data)) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('SharedSize', $data)) {
                $object->setSharedSize($data['SharedSize']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
            }
            if (\array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
            }
            if (\array_key_exists('Manifests', $data)) {
                $values_3 = [];
                foreach ($data['Manifests'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values_3);
            }
            if (\array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \Vendor\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['ParentId'] = $object->getParentId();
            $values = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
            $values_1 = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
            $data['Created'] = $object->getCreated();
            $data['Size'] = $object->getSize();
            $data['SharedSize'] = $object->getSharedSize();
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            $values_2 = [];
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels'] = $values_2;
            $data['Containers'] = $object->getContainers();
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values_3 = [];
                foreach ($object->getManifests() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Manifests'] = $values_3;
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ImageSummary::class => false];
        }
    }
} else {
    class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ImageSummary::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ImageSummary::class;
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
            $object = new \Vendor\Library\Generated\Model\ImageSummary();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('ParentId', $data)) {
                $object->setParentId($data['ParentId']);
            }
            if (\array_key_exists('RepoTags', $data)) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
            }
            if (\array_key_exists('RepoDigests', $data)) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('SharedSize', $data)) {
                $object->setSharedSize($data['SharedSize']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
            }
            if (\array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
            }
            if (\array_key_exists('Manifests', $data)) {
                $values_3 = [];
                foreach ($data['Manifests'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values_3);
            }
            if (\array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \Vendor\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['ParentId'] = $object->getParentId();
            $values = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
            $values_1 = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
            $data['Created'] = $object->getCreated();
            $data['Size'] = $object->getSize();
            $data['SharedSize'] = $object->getSharedSize();
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            $values_2 = [];
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels'] = $values_2;
            $data['Containers'] = $object->getContainers();
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values_3 = [];
                foreach ($object->getManifests() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['Manifests'] = $values_3;
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ImageSummary::class => false];
        }
    }
}