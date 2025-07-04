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
    class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ImageInspect::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ImageInspect::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ImageInspect();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \Vendor\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            if (\array_key_exists('Manifests', $data) && $data['Manifests'] !== null) {
                $values = [];
                foreach ($data['Manifests'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values);
            }
            elseif (\array_key_exists('Manifests', $data) && $data['Manifests'] === null) {
                $object->setManifests(null);
            }
            if (\array_key_exists('RepoTags', $data)) {
                $values_1 = [];
                foreach ($data['RepoTags'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoTags($values_1);
            }
            if (\array_key_exists('RepoDigests', $data)) {
                $values_2 = [];
                foreach ($data['RepoDigests'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRepoDigests($values_2);
            }
            if (\array_key_exists('Parent', $data)) {
                $object->setParent($data['Parent']);
            }
            if (\array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
            }
            if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
                $object->setCreated($data['Created']);
            }
            elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
                $object->setCreated(null);
            }
            if (\array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
            }
            if (\array_key_exists('Author', $data)) {
                $object->setAuthor($data['Author']);
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \Vendor\Library\Generated\Model\ImageConfig::class, 'json', $context));
            }
            if (\array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
            }
            if (\array_key_exists('Variant', $data) && $data['Variant'] !== null) {
                $object->setVariant($data['Variant']);
            }
            elseif (\array_key_exists('Variant', $data) && $data['Variant'] === null) {
                $object->setVariant(null);
            }
            if (\array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
            }
            if (\array_key_exists('OsVersion', $data) && $data['OsVersion'] !== null) {
                $object->setOsVersion($data['OsVersion']);
            }
            elseif (\array_key_exists('OsVersion', $data) && $data['OsVersion'] === null) {
                $object->setOsVersion(null);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('GraphDriver', $data)) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \Vendor\Library\Generated\Model\DriverData::class, 'json', $context));
            }
            if (\array_key_exists('RootFS', $data)) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], \Vendor\Library\Generated\Model\ImageInspectRootFS::class, 'json', $context));
            }
            if (\array_key_exists('Metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], \Vendor\Library\Generated\Model\ImageInspectMetadata::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values = [];
                foreach ($object->getManifests() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Manifests'] = $values;
            }
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values_1 = [];
                foreach ($object->getRepoTags() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoTags'] = $values_1;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_2 = [];
                foreach ($object->getRepoDigests() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['RepoDigests'] = $values_2;
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['Author'] = $object->getAuthor();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['Variant'] = $object->getVariant();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('rootFS') && null !== $object->getRootFS()) {
                $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ImageInspect::class => false];
        }
    }
} else {
    class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ImageInspect::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ImageInspect::class;
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
            $object = new \Vendor\Library\Generated\Model\ImageInspect();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('Descriptor', $data)) {
                $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], \Vendor\Library\Generated\Model\OCIDescriptor::class, 'json', $context));
            }
            if (\array_key_exists('Manifests', $data) && $data['Manifests'] !== null) {
                $values = [];
                foreach ($data['Manifests'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\ImageManifestSummary::class, 'json', $context);
                }
                $object->setManifests($values);
            }
            elseif (\array_key_exists('Manifests', $data) && $data['Manifests'] === null) {
                $object->setManifests(null);
            }
            if (\array_key_exists('RepoTags', $data)) {
                $values_1 = [];
                foreach ($data['RepoTags'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoTags($values_1);
            }
            if (\array_key_exists('RepoDigests', $data)) {
                $values_2 = [];
                foreach ($data['RepoDigests'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRepoDigests($values_2);
            }
            if (\array_key_exists('Parent', $data)) {
                $object->setParent($data['Parent']);
            }
            if (\array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
            }
            if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
                $object->setCreated($data['Created']);
            }
            elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
                $object->setCreated(null);
            }
            if (\array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
            }
            if (\array_key_exists('Author', $data)) {
                $object->setAuthor($data['Author']);
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \Vendor\Library\Generated\Model\ImageConfig::class, 'json', $context));
            }
            if (\array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
            }
            if (\array_key_exists('Variant', $data) && $data['Variant'] !== null) {
                $object->setVariant($data['Variant']);
            }
            elseif (\array_key_exists('Variant', $data) && $data['Variant'] === null) {
                $object->setVariant(null);
            }
            if (\array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
            }
            if (\array_key_exists('OsVersion', $data) && $data['OsVersion'] !== null) {
                $object->setOsVersion($data['OsVersion']);
            }
            elseif (\array_key_exists('OsVersion', $data) && $data['OsVersion'] === null) {
                $object->setOsVersion(null);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('GraphDriver', $data)) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], \Vendor\Library\Generated\Model\DriverData::class, 'json', $context));
            }
            if (\array_key_exists('RootFS', $data)) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], \Vendor\Library\Generated\Model\ImageInspectRootFS::class, 'json', $context));
            }
            if (\array_key_exists('Metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], \Vendor\Library\Generated\Model\ImageInspectMetadata::class, 'json', $context));
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
            if ($object->isInitialized('descriptor') && null !== $object->getDescriptor()) {
                $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
            }
            if ($object->isInitialized('manifests') && null !== $object->getManifests()) {
                $values = [];
                foreach ($object->getManifests() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Manifests'] = $values;
            }
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values_1 = [];
                foreach ($object->getRepoTags() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoTags'] = $values_1;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_2 = [];
                foreach ($object->getRepoDigests() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['RepoDigests'] = $values_2;
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['Author'] = $object->getAuthor();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['Variant'] = $object->getVariant();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('rootFS') && null !== $object->getRootFS()) {
                $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ImageInspect::class => false];
        }
    }
}