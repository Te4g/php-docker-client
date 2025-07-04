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
    class OCIDescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\OCIDescriptor::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\OCIDescriptor::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\OCIDescriptor();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('mediaType', $data)) {
                $object->setMediaType($data['mediaType']);
            }
            if (\array_key_exists('digest', $data)) {
                $object->setDigest($data['digest']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
            }
            if (\array_key_exists('urls', $data) && $data['urls'] !== null) {
                $values = [];
                foreach ($data['urls'] as $value) {
                    $values[] = $value;
                }
                $object->setUrls($values);
            }
            elseif (\array_key_exists('urls', $data) && $data['urls'] === null) {
                $object->setUrls(null);
            }
            if (\array_key_exists('annotations', $data) && $data['annotations'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['annotations'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setAnnotations($values_1);
            }
            elseif (\array_key_exists('annotations', $data) && $data['annotations'] === null) {
                $object->setAnnotations(null);
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $object->setData($data['data']);
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('platform', $data) && $data['platform'] !== null) {
                $object->setPlatform($this->denormalizer->denormalize($data['platform'], \Vendor\Library\Generated\Model\OCIPlatform::class, 'json', $context));
            }
            elseif (\array_key_exists('platform', $data) && $data['platform'] === null) {
                $object->setPlatform(null);
            }
            if (\array_key_exists('artifactType', $data) && $data['artifactType'] !== null) {
                $object->setArtifactType($data['artifactType']);
            }
            elseif (\array_key_exists('artifactType', $data) && $data['artifactType'] === null) {
                $object->setArtifactType(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('mediaType') && null !== $object->getMediaType()) {
                $data['mediaType'] = $object->getMediaType();
            }
            if ($object->isInitialized('digest') && null !== $object->getDigest()) {
                $data['digest'] = $object->getDigest();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('urls') && null !== $object->getUrls()) {
                $values = [];
                foreach ($object->getUrls() as $value) {
                    $values[] = $value;
                }
                $data['urls'] = $values;
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_1 = [];
                foreach ($object->getAnnotations() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['annotations'] = $values_1;
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $object->getData();
            }
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('artifactType') && null !== $object->getArtifactType()) {
                $data['artifactType'] = $object->getArtifactType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\OCIDescriptor::class => false];
        }
    }
} else {
    class OCIDescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\OCIDescriptor::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\OCIDescriptor::class;
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
            $object = new \Vendor\Library\Generated\Model\OCIDescriptor();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('mediaType', $data)) {
                $object->setMediaType($data['mediaType']);
            }
            if (\array_key_exists('digest', $data)) {
                $object->setDigest($data['digest']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
            }
            if (\array_key_exists('urls', $data) && $data['urls'] !== null) {
                $values = [];
                foreach ($data['urls'] as $value) {
                    $values[] = $value;
                }
                $object->setUrls($values);
            }
            elseif (\array_key_exists('urls', $data) && $data['urls'] === null) {
                $object->setUrls(null);
            }
            if (\array_key_exists('annotations', $data) && $data['annotations'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['annotations'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setAnnotations($values_1);
            }
            elseif (\array_key_exists('annotations', $data) && $data['annotations'] === null) {
                $object->setAnnotations(null);
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $object->setData($data['data']);
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('platform', $data) && $data['platform'] !== null) {
                $object->setPlatform($this->denormalizer->denormalize($data['platform'], \Vendor\Library\Generated\Model\OCIPlatform::class, 'json', $context));
            }
            elseif (\array_key_exists('platform', $data) && $data['platform'] === null) {
                $object->setPlatform(null);
            }
            if (\array_key_exists('artifactType', $data) && $data['artifactType'] !== null) {
                $object->setArtifactType($data['artifactType']);
            }
            elseif (\array_key_exists('artifactType', $data) && $data['artifactType'] === null) {
                $object->setArtifactType(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('mediaType') && null !== $object->getMediaType()) {
                $data['mediaType'] = $object->getMediaType();
            }
            if ($object->isInitialized('digest') && null !== $object->getDigest()) {
                $data['digest'] = $object->getDigest();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('urls') && null !== $object->getUrls()) {
                $values = [];
                foreach ($object->getUrls() as $value) {
                    $values[] = $value;
                }
                $data['urls'] = $values;
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_1 = [];
                foreach ($object->getAnnotations() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['annotations'] = $values_1;
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $object->getData();
            }
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('artifactType') && null !== $object->getArtifactType()) {
                $data['artifactType'] = $object->getArtifactType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\OCIDescriptor::class => false];
        }
    }
}