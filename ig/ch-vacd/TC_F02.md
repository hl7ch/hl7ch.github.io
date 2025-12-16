# TC F 02 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC F 02**

## TC F 02

## Test Case F 02: Add comment (note) to an existing AllergyIntolerance

### Precondition

In the ehealth ecosystem of the patient there are several ImmunizationAdministration documents with AllergyIntolerance set.

### Sequence

The practitioner HCP1 add a comment (note) to an existing AllergyIntolerance in an exitsting ImmunizationAdministration document. Therefor a new ImmunizationAdministration document will be created.

### Result

The practitioner HCP1 has created an ImmunizationAdministration [document F_D2_HCP1_C1](Bundle-F-D2-HCP1-C1.md) which adds a comment to the AllergyIntolerance entry added in [document F_D1_HCP1_C1](Bundle-F-D1-HCP1-C1.md).

In the [resulting document](Bundle-RDF01.md) only the AllergyIntolerance with the note entry will be shown.

### Documents

* [F_D3_HCP1_C1](Bundle-F-D3-HCP1-C1.md)
* [F_D4_HCP1_C1](Bundle-F-D4-HCP1-C1.md)
* [Result. Document F 02](Bundle-RDF02.md)
* [Result. Document F 02b](Bundle-RDF02b.md)

### Entries

* [AllergyIntolerance (TCF02_ALLINTO1)](AllergyIntolerance-TCF02-ALLINTO1.md)
* [AllergyIntolerance (TCF02_ALLINTO2)](AllergyIntolerance-TCF02-ALLINTO2.md)
* [AllergyIntolerance (TCF02_ALLINTO3)](AllergyIntolerance-TCF02-ALLINTO3.md)

