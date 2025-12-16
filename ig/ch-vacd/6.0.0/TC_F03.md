# TC F 03 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **TC F 03**

## TC F 03

## Test Case F 01: Add comment (note) to an existing Condition(PastIllness)

### Precondition

In the ehealth ecosystem of the patient there are several ImmunizationAdministration documents with Condition(PastIllness) set.

### Sequence

The practitioner HCP1 add a comment (note) to an existing Condition(PastIllness) in an exitsting ImmunizationAdministration document. Therefor a new ImmunizationAdministration document will be created.

### Result

The practitioner HCP1 has created an ImmunizationAdministration [document F_D6_HCP1_C1](Bundle-F-D6-HCP1-C1.md) which adds a comment to the Condition(PastIllness) entry added in [document F_D5_HCP1_C1](Bundle-F-D5-HCP1-C1.md).

In the [resulting document](Bundle-RDF03.md) only the Condition(PastIllness) with the note entry will be shown.

### Documents

* [F_D5_HCP1_C1](Bundle-F-D5-HCP1-C1.md)
* [F_D6_HCP1_C1](Bundle-F-D6-HCP1-C1.md)
* [Result. Document F 03](Bundle-RDF03.md)
* [Result. Document F 03b](Bundle-RDF03b.md)

### Entries

* [Condition (TCF03-UNDILL1)](Condition-TCF03-UNDILL1.md)
* [Condition (TCF03-UNDILL2)](Condition-TCF03-UNDILL2.md)
* [Condition (TCF03-UNDILL3)](Condition-TCF03-UNDILL3.md)

