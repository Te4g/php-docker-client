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
    class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Task::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Task::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Task();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Vendor\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('UpdatedAt', $data)) {
                $object->setUpdatedAt($data['UpdatedAt']);
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
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Vendor\Library\Generated\Model\TaskSpec::class, 'json', $context));
            }
            if (\array_key_exists('ServiceID', $data)) {
                $object->setServiceID($data['ServiceID']);
            }
            if (\array_key_exists('Slot', $data)) {
                $object->setSlot($data['Slot']);
            }
            if (\array_key_exists('NodeID', $data)) {
                $object->setNodeID($data['NodeID']);
            }
            if (\array_key_exists('AssignedGenericResources', $data)) {
                $values_1 = [];
                foreach ($data['AssignedGenericResources'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
                }
                $object->setAssignedGenericResources($values_1);
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['Status'], \Vendor\Library\Generated\Model\TaskStatus::class, 'json', $context));
            }
            if (\array_key_exists('DesiredState', $data)) {
                $object->setDesiredState($data['DesiredState']);
            }
            if (\array_key_exists('JobIteration', $data)) {
                $object->setJobIteration($this->denormalizer->denormalize($data['JobIteration'], \Vendor\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
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
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('serviceID') && null !== $object->getServiceID()) {
                $data['ServiceID'] = $object->getServiceID();
            }
            if ($object->isInitialized('slot') && null !== $object->getSlot()) {
                $data['Slot'] = $object->getSlot();
            }
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('assignedGenericResources') && null !== $object->getAssignedGenericResources()) {
                $values_1 = [];
                foreach ($object->getAssignedGenericResources() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['AssignedGenericResources'] = $values_1;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('desiredState') && null !== $object->getDesiredState()) {
                $data['DesiredState'] = $object->getDesiredState();
            }
            if ($object->isInitialized('jobIteration') && null !== $object->getJobIteration()) {
                $data['JobIteration'] = $this->normalizer->normalize($object->getJobIteration(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Task::class => false];
        }
    }
} else {
    class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Task::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Task::class;
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
            $object = new \Vendor\Library\Generated\Model\Task();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data)) {
                $object->setID($data['ID']);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Vendor\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            if (\array_key_exists('CreatedAt', $data)) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            if (\array_key_exists('UpdatedAt', $data)) {
                $object->setUpdatedAt($data['UpdatedAt']);
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
            if (\array_key_exists('Spec', $data)) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Vendor\Library\Generated\Model\TaskSpec::class, 'json', $context));
            }
            if (\array_key_exists('ServiceID', $data)) {
                $object->setServiceID($data['ServiceID']);
            }
            if (\array_key_exists('Slot', $data)) {
                $object->setSlot($data['Slot']);
            }
            if (\array_key_exists('NodeID', $data)) {
                $object->setNodeID($data['NodeID']);
            }
            if (\array_key_exists('AssignedGenericResources', $data)) {
                $values_1 = [];
                foreach ($data['AssignedGenericResources'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\GenericResourcesItem::class, 'json', $context);
                }
                $object->setAssignedGenericResources($values_1);
            }
            if (\array_key_exists('Status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['Status'], \Vendor\Library\Generated\Model\TaskStatus::class, 'json', $context));
            }
            if (\array_key_exists('DesiredState', $data)) {
                $object->setDesiredState($data['DesiredState']);
            }
            if (\array_key_exists('JobIteration', $data)) {
                $object->setJobIteration($this->denormalizer->denormalize($data['JobIteration'], \Vendor\Library\Generated\Model\ObjectVersion::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
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
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('serviceID') && null !== $object->getServiceID()) {
                $data['ServiceID'] = $object->getServiceID();
            }
            if ($object->isInitialized('slot') && null !== $object->getSlot()) {
                $data['Slot'] = $object->getSlot();
            }
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('assignedGenericResources') && null !== $object->getAssignedGenericResources()) {
                $values_1 = [];
                foreach ($object->getAssignedGenericResources() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['AssignedGenericResources'] = $values_1;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['Status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('desiredState') && null !== $object->getDesiredState()) {
                $data['DesiredState'] = $object->getDesiredState();
            }
            if ($object->isInitialized('jobIteration') && null !== $object->getJobIteration()) {
                $data['JobIteration'] = $this->normalizer->normalize($object->getJobIteration(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Task::class => false];
        }
    }
}