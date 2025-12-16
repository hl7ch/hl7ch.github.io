# Document - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Document**

## Document

### FHIR document (Bundle)

This exchange format is defined as a [document](https://hl7.org/fhir/R4/documents.html) type that corresponds to a [Bundle](https://hl7.org/fhir/R4/bundle.html) as a FHIR resource. A Bundle has a list of entries. The first entry is the [Composition](https://hl7.org/fhir/R4/composition.html), in which all contained entries are then referenced.

![](document.png)

*Fig. 3: Schematic document structure of CH IPS*

### Profiles

* [**CH IPS Document**](StructureDefinition-ch-ips-document.md): Definition for the Swiss IPS Document, derived from the [CH Core Document](https://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-document.html) with support for conformity with the [IPS Document](https://hl7.org/fhir/uv/ips/STU2/StructureDefinition-Bundle-uv-ips.html). This profile ensures IPS-UV conformance and supports Swiss healthcare context requirements.
* [**CH IPS Document EPR**](StructureDefinition-ch-ips-document-epr.md): Definition for the Swiss IPS Document in the context of the electronic patient record (EPR), derived from the CH IPS Document. Conformity with the [CH Core Document EPR](https://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-document-epr.html) is ensured through the imposeProfile extension, and conformity with the [IPS Document](https://hl7.org/fhir/uv/ips/STU2/StructureDefinition-Bundle-uv-ips.html) is inherited from CH IPS Document. This profile additionally ensures Swiss EPR conformance.

### Examples

* [UC 1.1: Swiss IPS Document](Bundle-UC1-SwissIpsDocument1.md): Document includes required sections (including representation of an 'empty section') and a recommended section
* [UC 1.2: Swiss IPS Document - EPR conform](Bundle-UC1-SwissIpsDocument2.md): Document includes in addition to the required sections also some recommended and some optional sections

