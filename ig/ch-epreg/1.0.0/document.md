# Document - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* **Document**

## Document

### FHIR document (Bundle)

This exchange format is defined as a [document](https://hl7.org/fhir/R4/documents.html) type that corresponds to a [Bundle](https://hl7.org/fhir/R4/bundle.html) as a FHIR resource. A Bundle contains a list of entries. The first entry is the [Composition](https://hl7.org/fhir/R4/composition.html), in which all contained entries are then referenced.

![](document.png)

*Fig.: Schematic document structure for CH EPREG*

### Profile

[CH EPREG Document](StructureDefinition-ch-epreg-document.md): Definition for the FHIR representation of the **e**lectronic **preg**nancy passport in Switzerland.

### Examples

* [CH EPREG Document](Bundle-UC1-Document.md) for Use Case 1: Preeclampsia ([de](usecase-german.md#fallbeispiel-1-präeklampsie)/[fr](usecase-french.md#cas-dapplication-1--prééclampsie))
* [CH EPREG Document](Bundle-UC2-Document.md) for Use Case 2: Strong Labor Contractions ([de](usecase-german.md#fallbeispiel-2-starke-wehentätigkeit)/[fr](usecase-french.md#cas-dapplication-2--forte-activité-contractile))

