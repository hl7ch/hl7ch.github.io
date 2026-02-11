# Guidance Compositions - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* **Guidance Compositions**

## Guidance Compositions

## Definitions

The documents defined in this guide ([MTP](document_mtp.md), [DIS](document_dis.md), [PADV](document_padv.md), [PML](document_pml.md), [PMLc](document_pmlc.md), [PRE](document_pre.md)) are all FHIR documents. As such they all have the same structure, which is well described in the [FHIR documentation](https://www.hl7.org/fhir/documents.html).

This page outlines some important aspects of the document's structure and give several pointers towards useful documentations.

FHIR documents are a special type of [FHIR Bundles](https://www.hl7.org/fhir/bundle.html), with [type](https://www.hl7.org/fhir/bundle-definitions.html#Bundle.type) = `"document"`. The first [entry](https://www.hl7.org/fhir/bundle-definitions.html#Bundle.entry) of the document bundle is always a [composition](https://www.hl7.org/fhir/composition.html), that is a structure containing [references](https://www.hl7.org/fhir/references.htm) towards [resources](https://www.hl7.org/fhir/resource.html).

## Example

The example below shows the skeletton of the [FHIR's discharge summary document](https://www.hl7.org/fhir/document-example-dischargesummary.json.html).

* The resource is of Bundle of type `"document"`
* It contains a series of entries
* The first entry is a ressource of type `"composition"`, that references other entries by `"fullUrl"` 

```
{
"resourceType": "Bundle",
  ...
"type": "document",
"entry": [
  {
    "resource": {
      "resourceType": "Composition",
      ...
      "section": [
        {
          "title": "Reason for admission",
          ...
          "entry": [
            {
              "reference": "urn:uuid:541a72a8-df75-4484-ac89-ac4923f03b81"
            }
          ]
        },
        {
          "title": "Medications on Discharge",
          ...
          "entry": [
            {
              "reference": "urn:uuid:124a6916-5d84-4b8c-b250-10cefb8e6e86"
            },
            {
              "reference": "urn:uuid:673f8db5-0ffd-4395-9657-6da00420bbc1"
            }
          ]
        },
        {
          "title": "Known allergies",
         ...
          "entry": [
            {
              "reference": "urn:uuid:47600e0f-b6b5-4308-84b5-5dec157f7637"
            }
          ]
        }
      ]
    }
  },
  ...
  {
    "fullUrl": "urn:uuid:541a72a8-df75-4484-ac89-ac4923f03b81",
    "resource": {
      "resourceType": "Observation",
      ...
    }
  },
  {
    "fullUrl": "urn:uuid:124a6916-5d84-4b8c-b250-10cefb8e6e86",
    "resource": {
      "resourceType": "MedicationRequest",
      ...
    }
  },
  {
    "fullUrl": "urn:uuid:673f8db5-0ffd-4395-9657-6da00420bbc1",
    "resource": {
      "resourceType": "MedicationStatement",
      ...
    }
  },
  {
    "fullUrl": "urn:uuid:47600e0f-b6b5-4308-84b5-5dec157f7637",
    "resource": {
      "resourceType": "AllergyIntolerance",
      ...
    }
  }
],
 ...
}

```

 

## Processing documents

When processing a FHIR document, one should always start by reading the composition and then follow the references instead of listing every entry first.

## Contained resources

In some cases, resources must be [contained](https://www.hl7.org/fhir/references.html#contained) instead of [referenced](https://www.hl7.org/fhir/references.htm). This happens when a resource has no independant existance, that is it is only meaningful in the context of the containing resource.

In the eMedication context, this is the case for the [medication](StructureDefinition-ch-emed-epr-medication.md) resource, that must always be contained in a [medication statement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md) resource : medication only exists within the context of a medication statement.

