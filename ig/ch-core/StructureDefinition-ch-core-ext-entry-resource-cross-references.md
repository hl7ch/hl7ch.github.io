# Entry Resource Cross References - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Entry Resource Cross References**

## Extension: Entry Resource Cross References 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references | *Version*:6.0.0 |
| Active as of 2023-11-02 | *Computable Name*:EntryResourceCrossReferences |
| **Copyright/Legal**: CC0-1.0 | |

Extension to make a reference beween resources as entries in i.e. document bundles.

**Context of Use**

### Scope and Usage

This Extension can be used to reference entry to entry in two different documents (i.e. Bundle[type=document]). If you have to change attributes of an entry (i.e. Immunization) which is documented in a FHIR document Bundle/Composition, you create a new document - or a copy of - with the same content.

* First you change the attributes of the entry which have to be changed.
* Second you add the **relatesTo** information to the **Composition** in the **new document**.
* Third you add this extension to the Immunization entry in the new document. 
* The **entry** slice will be filled with the Identifier of the entry in the original document and define the resource type (Immunization).
* The **container** slice will be filled with the Identifier and resource type of the Composition in the original document.
* The **relationcode** slice will be set with the corresponding code (i.e. replaces).
 

The following graphic describes the two documents with their entries and the extension with the references:

You can use this extension for all kind of resources and containers.

**Usage info**

**Usages:**

* Examples for this Extension: [Bundle/2-ResourceCrossReferencesDokument](Bundle-2-ResourceCrossReferencesDokument.md) and [Immunization/ImmunizationEntry](Immunization-ImmunizationEntry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-ext-entry-resource-cross-references)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-ext-entry-resource-cross-references.csv), [Excel](StructureDefinition-ch-core-ext-entry-resource-cross-references.xlsx), [Schematron](StructureDefinition-ch-core-ext-entry-resource-cross-references.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-ext-entry-resource-cross-references",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references",
  "version" : "6.0.0",
  "name" : "EntryResourceCrossReferences",
  "title" : "Entry Resource Cross References",
  "status" : "active",
  "date" : "2023-11-02T00:00:00+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Extension to make a reference beween resources as entries in i.e. document bundles.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "DomainResource"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Entry Resource Cross References",
        "definition" : "Extension to make a reference beween resources as entries in i.e. document bundles."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 3
      },
      {
        "id" : "Extension.extension:entry",
        "path" : "Extension.extension",
        "sliceName" : "entry",
        "short" : "Reference to the related entry",
        "definition" : "Reference to the related entry.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:entry.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:entry.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "entry"
      },
      {
        "id" : "Extension.extension:entry.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Extension.extension:entry.value[x]:valueReference",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueReference",
        "short" : "Reference to the entry resource in an other container i.e. Bundle",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference"
          }
        ]
      },
      {
        "id" : "Extension.extension:entry.value[x]:valueReference.reference",
        "path" : "Extension.extension.value[x].reference",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:entry.value[x]:valueReference.type",
        "path" : "Extension.extension.value[x].type",
        "short" : "Entry resource type",
        "definition" : "The resource type of the referenced entry",
        "min" : 1
      },
      {
        "id" : "Extension.extension:entry.value[x]:valueReference.identifier",
        "path" : "Extension.extension.value[x].identifier",
        "short" : "Identifier of entry",
        "definition" : "A identifier of the referenced entry",
        "min" : 1
      },
      {
        "id" : "Extension.extension:container",
        "path" : "Extension.extension",
        "sliceName" : "container",
        "short" : "Reference to the related container resource",
        "definition" : "Reference to the related container resource",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:container.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:container.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "container"
      },
      {
        "id" : "Extension.extension:container.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Extension.extension:container.value[x]:valueReference",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueReference",
        "short" : "Reference to the container resource i.e. Bundle.composition containinig the referenced entry",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference"
          }
        ]
      },
      {
        "id" : "Extension.extension:container.value[x]:valueReference.reference",
        "path" : "Extension.extension.value[x].reference",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:container.value[x]:valueReference.type",
        "path" : "Extension.extension.value[x].type",
        "short" : "Container resource type",
        "definition" : "The resource type of the container containing the referenced entry",
        "min" : 1
      },
      {
        "id" : "Extension.extension:container.value[x]:valueReference.identifier",
        "path" : "Extension.extension.value[x].identifier",
        "short" : "Identifier of container",
        "definition" : "A identifier of the container containing the referenced entry",
        "min" : 1
      },
      {
        "id" : "Extension.extension:relationcode",
        "path" : "Extension.extension",
        "sliceName" : "relationcode",
        "short" : "Reference to the related document",
        "definition" : "Reference to the related document",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:relationcode.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:relationcode.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "relationcode"
      },
      {
        "id" : "Extension.extension:relationcode.value[x]",
        "path" : "Extension.extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.extension:relationcode.value[x]:valueCode",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCode",
        "short" : "The type of relationship between the elements in the documents.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/document-relationship-type"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
