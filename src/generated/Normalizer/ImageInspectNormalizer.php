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

class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()): bool
    {
        return $type === 'Vendor\\Library\\Generated\\Model\\ImageInspect';
    }
    public function supportsNormalization($data, $format = null, array $context = array()): bool
    {
        return is_object($data) && get_class($data) === 'Vendor\\Library\\Generated\\Model\\ImageInspect';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
        if (\array_key_exists('RepoTags', $data)) {
            $values = array();
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        }
        if (\array_key_exists('RepoDigests', $data)) {
            $values_1 = array();
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        }
        if (\array_key_exists('Parent', $data)) {
            $object->setParent($data['Parent']);
        }
        if (\array_key_exists('Comment', $data)) {
            $object->setComment($data['Comment']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Container', $data)) {
            $object->setContainer($data['Container']);
        }
        if (\array_key_exists('ContainerConfig', $data)) {
            $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Vendor\\Library\\Generated\\Model\\ContainerConfig', 'json', $context));
        }
        if (\array_key_exists('DockerVersion', $data)) {
            $object->setDockerVersion($data['DockerVersion']);
        }
        if (\array_key_exists('Author', $data)) {
            $object->setAuthor($data['Author']);
        }
        if (\array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Vendor\\Library\\Generated\\Model\\ContainerConfig', 'json', $context));
        }
        if (\array_key_exists('Architecture', $data)) {
            $object->setArchitecture($data['Architecture']);
        }
        if (\array_key_exists('Variant', $data) && $data['Variant'] !== null) {
            $object->setVariant($data['Variant']);
        } elseif (\array_key_exists('Variant', $data) && $data['Variant'] === null) {
            $object->setVariant(null);
        }
        if (\array_key_exists('Os', $data)) {
            $object->setOs($data['Os']);
        }
        if (\array_key_exists('OsVersion', $data) && $data['OsVersion'] !== null) {
            $object->setOsVersion($data['OsVersion']);
        } elseif (\array_key_exists('OsVersion', $data) && $data['OsVersion'] === null) {
            $object->setOsVersion(null);
        }
        if (\array_key_exists('Size', $data)) {
            $object->setSize($data['Size']);
        }
        if (\array_key_exists('VirtualSize', $data)) {
            $object->setVirtualSize($data['VirtualSize']);
        }
        if (\array_key_exists('GraphDriver', $data)) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Vendor\\Library\\Generated\\Model\\GraphDriverData', 'json', $context));
        }
        if (\array_key_exists('RootFS', $data)) {
            $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Vendor\\Library\\Generated\\Model\\ImageInspectRootFS', 'json', $context));
        }
        if (\array_key_exists('Metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Vendor\\Library\\Generated\\Model\\ImageInspectMetadata', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
            $values = array();
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
        }
        if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
            $values_1 = array();
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
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
        if ($object->isInitialized('container') && null !== $object->getContainer()) {
            $data['Container'] = $object->getContainer();
        }
        if ($object->isInitialized('containerConfig') && null !== $object->getContainerConfig()) {
            $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
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
        return array('Vendor\\Library\\Generated\\Model\\ImageInspect' => false);
    }
}
