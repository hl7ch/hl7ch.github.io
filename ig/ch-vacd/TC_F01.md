# TC F 01 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC F 01**

## TC F 01

## Test Case F 01: Add comment (note) to an existing Immunization

### Precondition

In the ehealth ecosystem of the patient there are several ImmunizationAdministration documents with Immunizations set.

### Sequence

The practitioner HCP1 add a comment (note) to an existing Immunization in an exitsting ImmunizationAdministration document. Therefor a new ImmunizationAdministration document will be created.

### Result

The practitioner HCP1 created an ImmunizationAdministration [document F_D2_HCP1_C1](Bundle-F-D2-HCP1-C1.md) which adds a comment to the Immunization entry added in [document F_D1_HCP1_C1](Bundle-F-D1-HCP1-C1.md).

In the [resulting document](Bundle-RDF01.md) only the immunization with the note entry will be shown.

### Documents

* [F_D1_HCP1_C1](Bundle-F-D1-HCP1-C1.md)
* [F_D2_HCP1_C1](Bundle-F-D2-HCP1-C1.md)
* [Result. Document F 01](Bundle-RDF01.md)
* [Result. Document F 01b](Bundle-RDF01b.md)

### Entries

* [Immunization (TCF01_IMMUN1)](Immunization-TCF01-IMMUN1.md)
* [Immunization (TCF01_IMMUN2)](Immunization-TCF01-IMMUN2.md)
* [Immunization (TCF01_IMMUN3)](Immunization-TCF01-IMMUN3.md)

