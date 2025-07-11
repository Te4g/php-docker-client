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
    class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\SwarmSpec();
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
            if (\array_key_exists('Orchestration', $data) && $data['Orchestration'] !== null) {
                $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \Vendor\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context));
            }
            elseif (\array_key_exists('Orchestration', $data) && $data['Orchestration'] === null) {
                $object->setOrchestration(null);
            }
            if (\array_key_exists('Raft', $data)) {
                $object->setRaft($this->denormalizer->denormalize($data['Raft'], \Vendor\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context));
            }
            if (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] !== null) {
                $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \Vendor\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context));
            }
            elseif (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] === null) {
                $object->setDispatcher(null);
            }
            if (\array_key_exists('CAConfig', $data) && $data['CAConfig'] !== null) {
                $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('CAConfig', $data) && $data['CAConfig'] === null) {
                $object->setCAConfig(null);
            }
            if (\array_key_exists('EncryptionConfig', $data)) {
                $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \Vendor\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
            }
            if (\array_key_exists('TaskDefaults', $data)) {
                $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \Vendor\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context));
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
            if ($object->isInitialized('orchestration') && null !== $object->getOrchestration()) {
                $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
            }
            if ($object->isInitialized('raft') && null !== $object->getRaft()) {
                $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
            }
            if ($object->isInitialized('dispatcher') && null !== $object->getDispatcher()) {
                $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
            }
            if ($object->isInitialized('cAConfig') && null !== $object->getCAConfig()) {
                $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
            }
            if ($object->isInitialized('encryptionConfig') && null !== $object->getEncryptionConfig()) {
                $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
            }
            if ($object->isInitialized('taskDefaults') && null !== $object->getTaskDefaults()) {
                $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmSpec::class => false];
        }
    }
} else {
    class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\SwarmSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\SwarmSpec::class;
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
            $object = new \Vendor\Library\Generated\Model\SwarmSpec();
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
            if (\array_key_exists('Orchestration', $data) && $data['Orchestration'] !== null) {
                $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \Vendor\Library\Generated\Model\SwarmSpecOrchestration::class, 'json', $context));
            }
            elseif (\array_key_exists('Orchestration', $data) && $data['Orchestration'] === null) {
                $object->setOrchestration(null);
            }
            if (\array_key_exists('Raft', $data)) {
                $object->setRaft($this->denormalizer->denormalize($data['Raft'], \Vendor\Library\Generated\Model\SwarmSpecRaft::class, 'json', $context));
            }
            if (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] !== null) {
                $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \Vendor\Library\Generated\Model\SwarmSpecDispatcher::class, 'json', $context));
            }
            elseif (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] === null) {
                $object->setDispatcher(null);
            }
            if (\array_key_exists('CAConfig', $data) && $data['CAConfig'] !== null) {
                $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \Vendor\Library\Generated\Model\SwarmSpecCAConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('CAConfig', $data) && $data['CAConfig'] === null) {
                $object->setCAConfig(null);
            }
            if (\array_key_exists('EncryptionConfig', $data)) {
                $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \Vendor\Library\Generated\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
            }
            if (\array_key_exists('TaskDefaults', $data)) {
                $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \Vendor\Library\Generated\Model\SwarmSpecTaskDefaults::class, 'json', $context));
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
            if ($object->isInitialized('orchestration') && null !== $object->getOrchestration()) {
                $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
            }
            if ($object->isInitialized('raft') && null !== $object->getRaft()) {
                $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
            }
            if ($object->isInitialized('dispatcher') && null !== $object->getDispatcher()) {
                $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
            }
            if ($object->isInitialized('cAConfig') && null !== $object->getCAConfig()) {
                $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
            }
            if ($object->isInitialized('encryptionConfig') && null !== $object->getEncryptionConfig()) {
                $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
            }
            if ($object->isInitialized('taskDefaults') && null !== $object->getTaskDefaults()) {
                $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\SwarmSpec::class => false];
        }
    }
}