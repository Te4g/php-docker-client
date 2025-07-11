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
    class ServicesIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
            }
            if (\array_key_exists('TaskTemplate', $data)) {
                $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \Vendor\Library\Generated\Model\TaskSpec::class, 'json', $context));
            }
            if (\array_key_exists('Mode', $data)) {
                $object->setMode($this->denormalizer->denormalize($data['Mode'], \Vendor\Library\Generated\Model\ServiceSpecMode::class, 'json', $context));
            }
            if (\array_key_exists('UpdateConfig', $data)) {
                $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \Vendor\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context));
            }
            if (\array_key_exists('RollbackConfig', $data)) {
                $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \Vendor\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context));
            }
            if (\array_key_exists('Networks', $data)) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $object->setNetworks($values_1);
            }
            if (\array_key_exists('EndpointSpec', $data)) {
                $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \Vendor\Library\Generated\Model\EndpointSpec::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('taskTemplate') && null !== $object->getTaskTemplate()) {
                $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
            }
            if ($object->isInitialized('updateConfig') && null !== $object->getUpdateConfig()) {
                $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
            }
            if ($object->isInitialized('rollbackConfig') && null !== $object->getRollbackConfig()) {
                $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_1 = [];
                foreach ($object->getNetworks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Networks'] = $values_1;
            }
            if ($object->isInitialized('endpointSpec') && null !== $object->getEndpointSpec()) {
                $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class => false];
        }
    }
} else {
    class ServicesIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class;
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
            $object = new \Vendor\Library\Generated\Model\ServicesIdUpdatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data)) {
                $object->setName($data['Name']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
            }
            if (\array_key_exists('TaskTemplate', $data)) {
                $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \Vendor\Library\Generated\Model\TaskSpec::class, 'json', $context));
            }
            if (\array_key_exists('Mode', $data)) {
                $object->setMode($this->denormalizer->denormalize($data['Mode'], \Vendor\Library\Generated\Model\ServiceSpecMode::class, 'json', $context));
            }
            if (\array_key_exists('UpdateConfig', $data)) {
                $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \Vendor\Library\Generated\Model\ServiceSpecUpdateConfig::class, 'json', $context));
            }
            if (\array_key_exists('RollbackConfig', $data)) {
                $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \Vendor\Library\Generated\Model\ServiceSpecRollbackConfig::class, 'json', $context));
            }
            if (\array_key_exists('Networks', $data)) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\NetworkAttachmentConfig::class, 'json', $context);
                }
                $object->setNetworks($values_1);
            }
            if (\array_key_exists('EndpointSpec', $data)) {
                $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \Vendor\Library\Generated\Model\EndpointSpec::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('taskTemplate') && null !== $object->getTaskTemplate()) {
                $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
            }
            if ($object->isInitialized('updateConfig') && null !== $object->getUpdateConfig()) {
                $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
            }
            if ($object->isInitialized('rollbackConfig') && null !== $object->getRollbackConfig()) {
                $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_1 = [];
                foreach ($object->getNetworks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Networks'] = $values_1;
            }
            if ($object->isInitialized('endpointSpec') && null !== $object->getEndpointSpec()) {
                $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ServicesIdUpdatePostBody::class => false];
        }
    }
}